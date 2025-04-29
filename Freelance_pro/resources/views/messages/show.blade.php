@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow">
        <!-- Chat Header -->
        <div class="p-4 border-b">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                </div>
                <div class="ml-4">
                    <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
                    <p class="text-sm text-gray-500">Online</p>
                </div>
            </div>
        </div>

        <!-- Messages -->
        <div class="p-4 space-y-4 h-[60vh] overflow-y-auto">
            @foreach($messages as $message)
                <div class="flex {{ $message->sender_id == auth()->id() ? 'justify-end' : 'justify-start' }}">
                    <div class="max-w-[70%]">
                        <div class="flex items-center {{ $message->sender_id == auth()->id() ? 'justify-end' : 'justify-start' }} mb-1">
                            <span class="text-xs text-gray-500">{{ $message->created_at->format('h:i A') }}</span>
                        </div>
                        <div class="rounded-lg p-3 {{ $message->sender_id == auth()->id() ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-900' }}">
                            {{ $message->message }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Message Input -->
        <div class="p-4 border-t">
            <form action="{{ route('messages.store', $user) }}" method="POST">
                @csrf
                <div class="flex items-center space-x-4">
                    <input type="text" 
                           name="message" 
                           class="flex-1 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200" 
                           placeholder="Type your message..."
                           required>
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 