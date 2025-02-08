<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">Create User</h1>
        
        <form action="{{ route('users.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf  
                <div class="mb-4">
                <label class="block">Name</label>
                <input type="text" name="name" class="w-3/4 border p-2" required >
                @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
                @endif
                </div>
                <div class="mb-4">
                <label class="block">Email</label>
                <input type="text" name="email" class="w-3/4 border p-2" required>
                @if($errors->has('email'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
                @endif
                </div>
                <div class="mb-4">
                <label class="block">Phone</label>
                <input type="tel" name="phone" class="w-3/4 border p-2" required pattern="[0-9]+" title="Only numbers are allowed">
                @if($errors->has('phone'))
                <span class="help-block error invalid-feedback">
                <strong>{{$errors->first('phone')}}</strong>
                </span>
                @endif
                </div>
                <div class="mb-4">
                <label class="block">Password</label>
                <input type="password" name="password" class="w-3/4 border p-2" required>
                @if($errors->has('password'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('password')}}</strong>
                </span>
                @endif
                </div>
                <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-green-500 text-black rounded">Submit</button>
                </div>
        </div>
           
        </form>
    </div>
</x-app-layout>
