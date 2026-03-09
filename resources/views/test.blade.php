@extends('layouts.app')
@section('title','Test Page')

@section('content')
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-xl text-center">
        <h1 class="text-3xl text-red-600 mb-6">Welcome to New File with Common Structure</h1>

        <form class="flex flex-col items-center justify-center space-y-4 w-full">
            <input type="text" name="org_url"
                class="w-full border-2 border-blue-400 px-4 py-3 rounded-xl focus:border-blue-600 focus:ring-4 focus:ring-blue-300 focus:outline-none bg-blue-50"
                placeholder="Put the URL">

            <input type="button" value="Create" class="bg-teal-900 text-white px-4 py-4 rounded-xl hover:bg-teal-700 transition-colors duration-200">
           
        </form>
    </div>
@endsection