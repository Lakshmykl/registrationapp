<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">Edit User</h1>
        
        <form action="{{ route('users.update', $user) }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2" required>
                @if($errors->has('name'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
                @endif    
            </div>
                <div class="mb-4">
                <label class="block">Email</label>
                <input type="text" name="email" value="{{ $user->email }}" class="w-full border p-2" required>
                @if($errors->has('email'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
                @endif    
            </div>
                <div class="mb-4">
                <label class="block">Phone</label>
                <input type="text" name="phone" value="{{ $user->phone }}" class="w-full border p-2" required>
                @if($errors->has('phone'))
                <span class="help-block error invalid-feedback">
                    <strong>{{$errors->first('phone')}}</strong>
                </span>
                @endif   
            </div>
                <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-green-500 text-black rounded">Update</button>
                </div>
        </div>
        </form>
    </div>
</x-app-layout>
