<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

new #[Layout('layouts::frontend')] class extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';
    public $captcha = '';

    protected function rules()
    {
        return [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:5000',
            'captcha' => 'required|captcha',
        ];
    }

    protected $messages = [
        'name.required'       => 'Full name is required.',
        'email.required'      => 'Email address is required.',
        'email.email'         => 'Please enter a valid email address.',
        'subject.required'    => 'Subject is required.',
        'message.required'    => 'Message is required.',
        'message.min'         => 'Message must be at least 10 characters.',
        'captcha.required'    => 'Captcha is required.',
        'captcha.captcha'     => 'The captcha code is incorrect.',
    ];

    public function sendMessage()
    {
        $validated = $this->validate();

        try {
            $emailBody = "
New Contact Form Message

Full Name:
{$validated['name']}

Email:
{$validated['email']}

Subject:
{$validated['subject']}

Message:
{$validated['message']}

---
This message was sent from the website contact form.
";

            Mail::raw($emailBody, function ($mail) use ($validated) {
                $mail->to('info@kap-har.com')
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('New Contact Form Message - ' . $validated['subject']);
            });

            session()->flash('message', 'Your message has been sent successfully.');

            $this->reset([
                'name',
                'email',
                'subject',
                'message',
                'captcha',
            ]);

            $this->dispatch('refresh-captcha');

        } catch (\Throwable $e) {
            Log::error('Contact form email failed', [
                'error' => $e->getMessage(),
            ]);

            session()->flash('error', 'Sorry, your message could not be sent. Please try again later.');
        }
    }

    public function refreshCaptcha()
    {
        $this->captcha = '';
        $this->dispatch('refresh-captcha');
    }
};
?>

<div>
    <main class="bg-white min-h-screen font-sans antialiased">

        <section class="bg-gray-50 py-16 border-b border-gray-100">
            <div class="max-w-[1240px] mx-auto px-6 text-center space-y-3">
                <h1 class="text-3xl md:text-4xl font-bold text-[#192229] tracking-tight">
                    Contact Us
                </h1>
                <p class="text-sm font-medium text-[#721c1c] uppercase tracking-[0.2em]">
                    KAP Herlina Astrid
                </p>
                <div class="w-12 h-[3px] bg-[#721c1c] mx-auto mt-4"></div>
            </div>
        </section>

        <section class="max-w-[1240px] mx-auto px-6 py-16 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                <div class="lg:col-span-5 space-y-8">
                    <div class="w-full h-[280px] rounded border border-gray-200 overflow-hidden shadow-sm bg-gray-50">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.452622955531!2d106.8559385!3d-6.2038677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMTMuOSJTIDEwNsKwNTEnMjEuNCJF!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                            class="w-full h-full border-none"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="space-y-5 text-[#192229]">
                        <h3 class="font-bold text-lg border-b border-gray-100 pb-2">
                            Office Information
                        </h3>

                        <div class="flex items-start gap-3.5 leading-relaxed">
                            <span class="text-[#721c1c] mt-1 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </span>
                            <p class="text-sm text-gray-600">
                                Jl. Matraman Raya No.119 Lt. 3, Palmeriam, Matraman, Jakarta Timur, DKI Jakarta 13140
                            </p>
                        </div>

                        <div class="flex items-center gap-3.5">
                            <span class="text-[#721c1c] shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </span>
                            <a href="mailto:info@kap-har.com" class="text-sm text-gray-600 hover:text-[#721c1c] transition-colors">
                                info@kap-har.com
                            </a>
                        </div>

                        <div class="flex items-center gap-3.5">
                            <span class="text-[#721c1c] shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </span>
                            <a href="tel:+6285215580717" class="text-sm text-gray-600 hover:text-[#721c1c] transition-colors">
                                +62 852-1558-0717 (WA Only)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-gray-50/60 rounded border border-gray-200/60 p-8 shadow-sm">
                    <div class="space-y-2 mb-6">
                        <h2 class="text-xl font-bold text-[#192229]">
                            Send Us a Message
                        </h2>
                        <p class="text-xs text-gray-500">
                            We will respond to your business inquiry within 24 hours.
                        </p>
                    </div>

                    @if (session()->has('message'))
                        <div class="mb-5 p-4 rounded bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" 
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" 
                                      clip-rule="evenodd"/>
                            </svg>
                            <span>{{ session('message') }}</span>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="mb-5 p-4 rounded bg-red-50 border border-red-200 text-red-800 text-sm flex items-center gap-2">
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    <form wire:submit.prevent="sendMessage" class="space-y-5">
                        <div class="space-y-1.5">
                            <label for="name" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">
                                Full Name
                            </label>
                            <input type="text"
                                   id="name"
                                   wire:model="name"
                                   class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors">

                            @error('name')
                                <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-1.5">
                            <label for="email" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">
                                Your Email Address
                            </label>
                            <input type="email"
                                   id="email"
                                   wire:model="email"
                                   class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors">

                            @error('email')
                                <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-1.5">
                            <label for="subject" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">
                                Subject
                            </label>
                            <input type="text"
                                   id="subject"
                                   wire:model="subject"
                                   class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors">

                            @error('subject')
                                <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-1.5">
                            <label for="message" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">
                                Your Message
                            </label>
                            <textarea id="message"
                                      wire:model="message"
                                      rows="5"
                                      class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors resize-none"></textarea>

                            @error('message')
                                <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-1.5">
                            <label for="captcha" class="text-xs font-semibold text-gray-700 uppercase tracking-wide block">
                                Captcha
                            </label>

                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2 flex-shrink-0">
                                    <div class="rounded overflow-hidden border border-gray-200 bg-white">
                                        <img id="captcha-img"
                                             src="{{ captcha_src('flat') }}"
                                             alt="captcha"
                                             class="h-10 block">
                                    </div>

                                    <button type="button"
                                            wire:click="refreshCaptcha"
                                            onclick="refreshCaptchaImage()"
                                            class="text-gray-400 hover:text-[#721c1c] p-1.5 rounded transition-colors"
                                            title="Refresh Captcha">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.253 8H18"/>
                                        </svg>
                                    </button>
                                </div>

                                <input type="text"
                                       id="captcha"
                                       wire:model="captcha"
                                       autocomplete="off"
                                       class="w-full px-4 py-2.5 rounded border border-gray-300 focus:outline-none focus:border-[#721c1c] text-sm bg-white transition-colors">
                            </div>

                            @error('captcha')
                                <span class="text-xs text-red-600 font-medium block mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                    wire:loading.attr="disabled"
                                    class="w-full sm:w-auto bg-[#721c1c] hover:bg-[#5f1717] disabled:bg-gray-400 text-white font-semibold text-sm px-8 py-3 rounded transition-colors shadow-sm flex items-center justify-center gap-2">

                                <span wire:loading.remove>
                                    Send Message
                                </span>

                                <span wire:loading class="flex items-center gap-2">
                                    <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" 
                                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    Sending...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

    </main>

    <script>
        function refreshCaptchaImage() {
            const captchaImage = document.getElementById('captcha-img');

            if (captchaImage) {
                captchaImage.src = '{{ captcha_src('flat') }}?' + Math.random();
            }
        }

        document.addEventListener('livewire:init', () => {
            Livewire.on('refresh-captcha', () => {
                refreshCaptchaImage();
            });
        });
    </script>
</div>