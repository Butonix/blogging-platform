<figure class="w-content content-quote flex">
    <svg class="text-primary-500 h-7 w-7 flex-none" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M8.09 11.6314H3.4C3.48 6.96144 4.4 6.19144 7.27 4.49144C7.6 4.29144 7.71 3.87144 7.51 3.53144C7.32 3.20144 6.89 3.09144 6.56 3.29144C3.18 5.29144 2 6.51144 2 12.3214V17.7114C2 19.4214 3.39 20.8014 5.09 20.8014H8.09C9.85 20.8014 11.18 19.4714 11.18 17.7114V14.7114C11.18 12.9614 9.85 11.6314 8.09 11.6314Z"
            fill="currentColor" />
        <path
            d="M18.9086 11.6314H14.2186C14.2986 6.96144 15.2186 6.19144 18.0886 4.49144C18.4186 4.29144 18.5286 3.87144 18.3286 3.53144C18.1286 3.20144 17.7086 3.09144 17.3686 3.29144C13.9886 5.29144 12.8086 6.51144 12.8086 12.3314V17.7214C12.8086 19.4314 14.1986 20.8114 15.8986 20.8114H18.8986C20.6586 20.8114 21.9886 19.4814 21.9886 17.7214V14.7214C21.9986 12.9614 20.6686 11.6314 18.9086 11.6314Z"
            fill="currentColor" />
    </svg>
    <div class="ml-4 flex grow flex-col">
        <blockquote
            class="content-block-quote{{ isset($data['alignment']) && $data['alignment'] ? ' block-quote--align-' . $data['alignment'] : '' }}"
            @if (isset($data['caption'])) cite="{{ $data['caption'] }}" @endif>
            {!! $data['text'] !!}
        </blockquote>
        @if (isset($data['caption']))
            <figcaption>
                &mdash; <cite>{!! $data['caption'] !!}</cite>
            </figcaption>
        @endif
    </div>
</figure>
