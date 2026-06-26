<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::frontend')] class extends Component
{
    //
};
?>



<div>
    <main class="min-h-screen flex items-center justify-center px-4 py-12 antialiased font-sans">
    
    <div class="w-full max-w-[440px] bg-white rounded-lg shadow-2xl border border-gray-100 overflow-hidden">
        
        <div class="bg-[#721c1c] px-6 py-4 flex justify-between items-center">
            <span class="text-white font-bold text-xs uppercase tracking-widest">Internal Access Portal</span>
            <div class="flex gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white/40"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-white/40"></span>
            </div>
        </div>

        <div class="p-8 space-y-6">
            
            <div class="text-center">
                <div class="bg-gray-50 px-5 py-3 rounded-md border border-gray-200/60 inline-block max-w-[200px] mx-auto shadow-sm">
                    <img src="{{ asset('asset_img/logo-har.svg') }}" alt="KAP Herlina Astrid" class="w-full h-auto mx-auto block">
                </div>
                <p class="text-xs text-gray-500 mt-3 tracking-wide">Please sign in with your credentials to enter the dashboard.</p>
            </div>

            @if (session()->has('error'))
                <div class="p-3.5 bg-red-50 border border-red-200 rounded text-red-700 text-xs flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            @endif

            <form wire:submit.prevent="authenticate" class="space-y-4">
                
                <div class="space-y-1.5">
                    <label for="email" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">Email Address</label>
                    <div class="relative">
                        <input type="email" id="email" wire:model="email" placeholder="name@herlinaastrid.com"
                               class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors">
                    </div>
                    @error('email') <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-1.5">
                    <div class="flex justify-between items-center">
                        <label for="password" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">Password</label>
                        <a href="#" class="text-[11px] text-[#721c1c] hover:underline font-medium">Forgot Password?</a>
                    </div>
                    <div class="relative">
                        <input type="password" id="password" wire:model="password" placeholder="••••••••"
                               class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors">
                    </div>
                    @error('password') <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" wire:model="remember" 
                           class="h-4 w-4 rounded border-gray-300 text-[#721c1c] focus:ring-[#721c1c]">
                    <label for="remember" class="ml-2 text-xs text-gray-600 select-none cursor-pointer">Remember device session</label>
                </div>

                <div class="pt-2">
                    <button type="submit" wire:loading.attr="disabled"
                            class="w-full bg-[#721c1c] hover:bg-[#5f1717] disabled:bg-gray-400 text-white font-semibold text-sm py-2.5 rounded transition-colors shadow-sm flex items-center justify-center gap-2">
                        <span wire:loading.remove>Sign In to Dashboard</span>
                        <span wire:loading class="flex items-center gap-2">
                            <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            Authenticating...
                        </span>
                    </button>
                </div>
            </form>

        </div>

        <div class="bg-gray-50/80 px-6 py-3.5 border-t border-gray-100 text-center">
            <p class="text-[11px] text-gray-400 leading-normal">
                Secured Connection. Authorized internal personnel access only.
            </p>
        </div>
    </div>
</main>
</div>