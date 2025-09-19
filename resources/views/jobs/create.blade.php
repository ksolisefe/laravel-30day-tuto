<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a few details to get started.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <x-form-field>
                <x-form-label for="title">Title</x-form-label>

                <div class="mt-2">
                    <x-form-input id="title" name="title" placeholder="CEO" required/>
                    <x-form-error name="title" />
                </div>
              </x-form-field>
              
              <div class="sm:col-span-4">
                <x-form-label for="salary">Salary</x-form-label>
                <div class="mt-2">
                  <x-form-input id="salary" name="salary" placeholder="$50,000.00" required></x-form-input>
                  <x-form-error name="salary" />
                </div>
              </div>

            </div>
            {{-- <div class="mt-10">
              @if($errors->any()) 
                <ul>
                  @foreach($errors->all() as $error)
                    <li class=" text-red-800 italic">{{ $error }}</li>
                  @endforeach
                </ul>
              @endif
            </div> --}}
          </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900 ">Cancel</a>
          <x-form-button>Save</x-form-button>
        </div>
      </form>

</x-layout>