{{-- @foreach ($messages as $message)
@if($message['user_id'] == Auth::id())
<div class="chat-message-right pb-4">
    <div>
        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40" />
        <div class="text-muted small text-nowrap mt-2">{{ date("h:i A", strtotime($message['created_at'])) }}</div>
    </div>
    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
        <div class="font-weight-bold mb-1">You</div>
        {{ $message['message'] }}
    </div>
</div>
@else
<div class="chat-message-left pb-4">
    <div>
        <img src="https://ui-avatars.com/api/?name={{ $otherUser->name }}" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40" />
        <div class="text-muted small text-nowrap mt-2">{{ date("h:i A", strtotime($message['created_at'])) }}</div>
    </div>
    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
        <div class="font-weight-bold mb-1">{{ $otherUser->name }}</div>
        {{ $message['message'] }}
    </div>
</div>
@endif
@endforeach --}}