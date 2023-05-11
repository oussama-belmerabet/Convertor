@extends('header')

@section('content')
    <div class="min-w-screen min-h-screen bg-gray-100 flex flex-col justify-center items-center">
        <div class="w-5/6 lg:w-3/6 rounded-2xl  bg-gradient-to-b shadow-xl">
            <div class="text-white bg-gray-200 py-4">
                <div class=" text-center font-bold text-2xl text-blue-900">
                    <h2 >
                        <i class="fab fa-gg"></i>
                        convert
                    </h2>
                </div>
                <form action="/convert" method="POST">
                    @csrf
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex flex-col font-bold w-2/6 px-2">
                            <label for="amount" class="mb-3 text-black">
                                Amount
                            </label>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection