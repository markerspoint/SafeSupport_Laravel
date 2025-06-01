<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'flex justify-center items-center px-4 py-1 bg-safegreen border border-safegreen rounded-md font-medium text-[0.85rem] text-white tracking-widest hover:bg-transparent hover:text-safegreen hover:border-safegreen focus:bg-safegreen/90 active:bg-safegreen/80 focus:outline-none focus:ring-2 focus:ring-safegreen focus:ring-offset-2 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
