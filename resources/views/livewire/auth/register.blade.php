<div>
    <div class="w-3/12 mx-auto mt-20">
        <form wire:submit.prevent="register" class="bg-black p-10 rounded-lg shadow-lg min-w-full">
        @csrf
            <h1 class="text-center text-2xl mb-6 text-white font-bold font-sans">Register Now</h1>
            <div>
                <label class="text-white font-semibold block my-3 text-md" for="name">Name</label>
                <input wire:model="name" required class="w-full bg-gray-700  px-4 py-2 rounded-lg focus:outline-none" type="text" id="name"/>
                @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="text-white font-semibold block my-3 text-md" for="email">Email</label>
                <input wire:model="email" required class="w-full bg-gray-700 px-4 py-2 rounded-lg focus:outline-none" type="text"id="email"/>
                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="text-white font-semibold block my-3 text-md" for="password">Password</label>
                <input wire:model="password" required class="w-full bg-gray-700 px-4 py-2 rounded-lg focus:outline-none" type="password"  id="password"/>
                @error('password') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="text-white font-semibold block my-3 text-md" for="password_confirmation">Confirm password</label>
                <input class="w-full bg-gray-700 px-4 py-2 rounded-lg focus:outline-none" type="password" wire:model="password_confirmation"required
                    id="password_confirmation" />
                    @error('password_confirmation') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <button type="submit"
                class="w-full mt-6 bg-yellow-700 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
                
            <button type="submit"
                class="w-full mt-6 mb-3 bg-sky-700 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans"><a href="{{route('login')}}" wire:navigate>Login</a></button>
        </form>
    </div>

</div>