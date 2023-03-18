<div class="mt-6">
    <textarea name="body"
              id="body" rows="5"
              class="w-full text-sm focus:outline-none"
              placeholder="Quick, thing of something to say!"
              required></textarea>

    <div class="flex justify-end mt-7 pt-3 border-t border-gray-200">
        <x-submit-button>Post</x-submit-button>
    </div>
    @error('body')
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>
