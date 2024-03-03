@forelse ($commentList as $cl)
    <div class="flex flex-col mb-2" id="commentContainer">
        <div class="flex items-center">
            @if ($cl->userPostComment->photo_profile)
                <img class="w-[30px] h-[30px] me-2 rounded-full object-cover object-top"
                    src="{{ asset('profile_photos/' . $cl->userPostComment->photo_profile) }}"
                    alt="{{ $cl->userPostComment->username }}">
            @else
                <img src="{{ asset('assets/img/Portrait_Placeholder.png') }}" alt="default"
                    class="w-[30px] h-[30px] me-2 rounded-full object-cover object-top">
            @endif
            <div class="flex flex-row gap-1 items-center">
                @if ($cl->userPostComment->username == null)
                    <p class="roboto-medium text-[13px]">
                        {{ $cl->userPostComment->fullName }}</p>
                @else
                    <p class="roboto-medium text-[13px]">
                        {{ $cl->userPostComment->username }}</p>
                @endif
                <span class="roboto-light text-[13px]">|</span>
                <p class="roboto-light text-[13px] text-[#3636367c]">
                    {{ \Carbon\Carbon::parse($cl->created_at)->format('M j, Y \a\t g:i a') }}
                </p>
                <span class="roboto-light text-[13px]">|</span>
                <p class="roboto-light text-[13px] text-[#3636367c]">
                    <button type="button" class="report-modal-toggle-button">
                        Report
                    </button>
                </p>
            </div>
        </div>
        <div class="ms-10">
            <p class="text-[12px] roboto-light">
                {{ $cl->comment_fill }}</p>
        </div>
    </div>
@empty
    <p class="text-sm roboto-light text-iconColor">No comments yet. Be
        the first to comment!</p>
@endforelse

<script>
    $(document).ready(function() {
        $('.report-modal-toggle-button').click(function() {
            $('.report-modal').toggleClass('hidden');
        });
    });
</script>
