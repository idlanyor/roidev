<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="relative w-full h-screen py-40 min-h-screen">
        <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
            style="background-image: url(../../assets/img/register_bg_2.png)"></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                        <div class="rounded-t mb-0 px-6 py-6">
                            <div class="btn-wrapper text-center">
                                <button
                                    class="bg-white active:bg-blueGray-50 text-blueGray-700  px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                    type="button">
                                    <img alt="..." class="w-5 mr-1" src="../../assets/img/github.svg" />Log
                                    In</button><button
                                    class="bg-white active:bg-blueGray-50 text-blueGray-700  px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                    type="button">
                                    <img alt="..." class="w-5 mr-1" src="../../assets/img/google.svg" />Sign Up
                                </button>
                            </div>
                            <hr class="mt-6 border-b-1 border-blueGray-300" />
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="relative w-full mb-3">
                                    <x-input-label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="grid-password">Email</x-input-label>
                                    <x-text-input type="email" name="email" required :value="old('email')" autofocus
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="relative w-full mb-3">
                                    <x-input-label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        for="grid-password">Password</x-input-label>
                                    <x-text-input type="password" :value="__('Password')" name="password"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                                <div>
                                    <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin"
                                            type="checkbox"
                                            class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" /><span
                                            class="ml-2 text-sm font-semibold text-blueGray-600">{{ __('Remember me') }}</span></label>

                                </div>

                                <div class="text-center mt-6">
                                    <x-primary-button
                                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                        type="submit">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
    /* Make dynamic date appear */
    (function() {
        if (document.getElementById("get-current-year")) {
            document.getElementById("get-current-year").innerHTML =
                new Date().getFullYear();
        }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>

</html>
