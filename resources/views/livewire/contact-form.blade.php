<div>
    <form wire:submit.prevent="submitForm" class="mt-4 ms-4">
        <div class="mt-2 ms-2">
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="name">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div class="mt-2 ms-2">
            <label for="email">Email :</label>
            <input type="email" id="email" wire:model="email">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

        <div class="mt-2 ms-2">
            <label for="message">Message:</label>
            <textarea id="message" wire:model="message"></textarea>
            @error('message') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="mt-2 ms-2">Submit</button>
    </form>
</div>