<div class="col-12 row m-2">

    @forelse ($datas as $data)

    <div class="col-5 m-2 scale-100 border-2 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div>
            <h2 class="mt-6 text-xl font-semibold">{{$data->name}}</h2>
            <h3 class="mt-2 font-semibold">{{$data->designation?$data->designation->name:''}}</h3>
            <h4 class="mt-2 font-semibold">{{$data->department?$data->department->name:''}}</h4>
        </div>
    </div>

    @empty
    <div class="col-1">
    </div>
    <div class="card col-9 d-flex justify-content-center">
        <div class="card-body text-center">
            <h2>{{ __('No Records') }}</h2>
        </div>
    </div>
    @endforelse


</div>