@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Messages</h1>
    
    <div class="bg-white rounded-lg shadow">
        @forelse($messages as $userId => $conversation)
            @php
                $otherUser = $conversation->first()->sender_id == auth()->id() 
                    ? $conversation->first()->receiver 
                    : $conversation->first()->sender;
                $lastMessage = $conversation->first();
            @endphp
            
            <a href="{{ route('messages.show', $otherUser) }}" class="block p-4 border-b hover:bg-gray-50">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full" src="{{ $otherUser->profile_photo_url }}" alt="{{ $otherUser->name }}">
                    </div>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">{{ $otherUser->name }}</h3>
                            <span class="text-sm text-gray-500">{{ $lastMessage->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-sm text-gray-500 truncate">{{ $lastMessage->message }}</p>
                    </div>
                </div>
            </a>
        @empty
            <div class="p-4 text-center text-gray-500">
                No messages yet. Start a conversation!
            </div>
        @endforelse
    </div>
</div>
@endsection 