<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::query();

        // Apply filters
        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        // Calculate statistics
        $totalServices = Service::count();
        $averagePrice = Service::avg('price');
        $totalRevenue = Service::sum('price');

        // Apply sorting
        if ($request->has('sort')) {
            $query->orderBy($request->sort, $request->direction ?? 'asc');
        }

        $services = $query->paginate(9);
        return view('admin.services', compact('services', 'totalServices', 'averagePrice', 'totalRevenue'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                
                
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($request->hasFile('image')) {
                try {
                    // Get the original file name
                    $originalName = $request->file('image')->getClientOriginalName();
                    // Generate a unique file name
                    $fileName = time() . '_' . $originalName;
                    
                    // Store the file in public/storage/service-picture
                    $request->file('image')->move(public_path('storage/service-picture'), $fileName);
                    
                    // Save the path relative to storage
                    $validated['image'] = 'service-picture/' . $fileName;
                    
                    // Log the storage details
                    \Log::info('Image upload attempt', [
                        'original_name' => $originalName,
                        'stored_name' => $fileName,
                        'path' => $validated['image'],
                        'full_path' => public_path('storage/' . $validated['image']),
                        'file_exists' => file_exists(public_path('storage/' . $validated['image']))
                    ]);
                } catch (\Exception $e) {
                    \Log::error('Image upload failed', [
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString()
                    ]);
                    return back()->with('error', 'Failed to upload image: ' . $e->getMessage());
                }
            }

            $service = Service::create($validated);
            \Log::info('Service created successfully', ['service' => $service->toArray()]);

            return redirect()->route('services.index')
                ->with('success', 'Service created successfully');
        } catch (\Exception $e) {
            \Log::error('Service creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->with('error', 'Failed to create service: ' . $e->getMessage());
        }
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            
           
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($service->image) {
                $oldPath = public_path('storage/' . $service->image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Get the original file name
            $originalName = $request->file('image')->getClientOriginalName();
            // Generate a unique file name
            $fileName = time() . '_' . $originalName;
            
            // Store the file in public/storage/service-picture
            $request->file('image')->move(public_path('storage/service-picture'), $fileName);
            
            // Save the path relative to storage
            $validated['image'] = 'service-picture/' . $fileName;
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            \Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return back()->with('success', 'Service deleted successfully');
    }
} 