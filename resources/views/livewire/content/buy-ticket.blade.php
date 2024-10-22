<div>
    <div class="max-w-lg mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container mt-10">
    <h2 class="text-2xl font-semibold text-white mb-6">Set Your Trip</h2>
    <form wire:submit.prevent="submitTicket">
      <div class="mb-4">
        <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Your Name</label>
        <input wire:model="name" type="text" id="name" name="name" placeholder="John Doe" required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
      </div>
      <div class="mb-4">
        <label for="address" class="block text-gray-300 text-sm font-bold mb-2">Your Address</label>
        <input wire:model="address" type="text" id="address" name="address" placeholder="Your Address" required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
      </div>
      <div class="mb-4">
        <label for="phone" class="block text-gray-300 text-sm font-bold mb-2">Your Phone</label>
        <input wire:model="phone" type="text" id="phone" name="phone" placeholder="Your Phone" required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
      </div>
      <div class="mb-4">
        <label for="journey_date" class="block text-gray-300 text-sm font-bold mb-2">Journey Date</label>
        <input wire:model="journey_date" type="date" id="journey_date" name="journey_date"required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
      </div>
      <div class="-mx-3 md:flex mb-2">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="state">
        State
      </label>
      <input wire:model="state" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="state" type="text" placeholder="State">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="city">
        City
      </label>
      <input wire:model="city" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white" id="city" type="text" placeholder="city">
    </div>
  </div>
  <div class="mb-4">
        <label for="country" class="block text-gray-300 text-sm font-bold mb-2">Country</label>
        <input wire:model="country" type="country" id="country" name="country" placeholder="Country" required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
      </div>
      <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Select Class</label>
      <div class="-mx-3 md:flex mb-2">
        
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    
    <div class="flex items-center me-4">
        <input wire:model="category" value="Economy" id="yellow-radio" type="radio" name="Economy" class="w-4 h-4 text-yellow-400 bg-yellow-600 dark:bg-yellow-700">
        <label for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Economy</label>
    </div>
    </div>
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
    <div class="flex items-center me-4">
        <input wire:model="category" value="Business" id="Business" type="radio" name="Business" class="w-4 h-4 text-yellow-400 bg-yellow-600 dark:bg-yellow-700">
        <label for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Business</label>
    </div>
    </div>
    <div class="md:w-1/2 px-3">
    <div class="flex items-center me-4">
        <input wire:model="category" value="Luxury" id="Luxury" type="radio" name="Luxury" class="w-4 h-4 text-yellow-400 bg-yellow-600 dark:bg-yellow-700">
        <label for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Luxury</label>
    </div>
    </div>
    <div class="md:w-1/2 px-3">
    <div class="flex items-center me-4">
        <input wire:model="category" value="Deluxe" id="Deluxe" type="radio" name="Deluxe" class="w-4 h-4 text-yellow-400 bg-yellow-600 dark:bg-yellow-700">
        <label for="yellow-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deluxe</label>
    </div>
    </div>
  </div>
  <button type="submit"
        class="bg-yellow-700 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue mt-5">
        Booking Now
      </button>
      </div>
    </form>
  </div>

  @if (session()->has('message'))
        <div class="mt-4 alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
</div>
