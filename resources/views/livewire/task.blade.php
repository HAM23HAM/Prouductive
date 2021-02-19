<div class="mt-4 sm:px-10 bg-white">

    <div class="text-3xl font-bold mb-3">
        To Do List
    </div>
    <div class="row pb-4">
        <div class="flex mx-3">
            <a href="{{ route('newtodos') }}" class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"> </span>
                Create New Task
            </a>
        </div>
        <div class="flex">
            <a href="{{ route ('newhabittodos')}}" class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"> </span>
                Create New Habit
            </a>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
        <div class="flex">
            <div>
                <p class="text-sm">{{ session('message') }}</p>
            </div>
        </div>
    </div>
    @endif
    <div class="wrap-container overflow: hidden; mb-4">
        <div class="container">
        @forelse($task as $row)
            <!-- CARD -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card ml-3 mt-2 mb-6" id="card-item" style="border-radius: 20px !important; box-shadow: 0px 5px 10px #6777EF; width: 800px;">
                        <div class="card-body d-flex">
                            <div class="col-lg-10">
                                <h3 class="title text-2xl font-bold mb-1" style="color:#6777EF;"> {{ $row->task }}</h3>
                                <table>
                                    <tr>
                                        <th style="font-size: 16px;">Deadline </th>
                                        <td style="font-size: 16px; font-weight:bold">&nbsp;:&nbsp;
                                            <span style="color: #FC544B;">{{ Carbon\Carbon::parse( $row->datentime )->diffForHumans() }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="font-size: 16px;">Reward </th>
                                        <td style="font-size: 16px; font-weight:bold">&nbsp;:&nbsp; {{ $row->reward }}</td>
                                    </tr>
                                    <!-- <tr>
                                        <th style="font-size: 16px;">Next step </th>
                                        <td style="font-size: 16px; font-weight:bold;">&nbsp;:&nbsp; <span style="color: #FFBD55;">{{ $row->step }}</span></td>
                                    </tr> -->
                                </table>
                                <div class="progress mt-2" style="width: 100%;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #FFBD55;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> 
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <button wire:click="complete({{ $row->id }})" type="button" style="position: absolute; bottom: 0;" class="-ml- btn btn-primary">
                                    <span class="fas fa-check"> </span>
                                </button>
                            </div>

                            <!-- trigger modal -->
                            <div class="col-lg-1">
                                <button wire:click="detail({{ $row->id }})" type="button" style="position: absolute; bottom: 0;" class="-ml- btn btn-primary">
                                    <span class="fas fa-expand"> </span>
                                </button>
                            </div>
                            @if ($isModal)
                                @include('livewire.detail')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
        <h2 class="text-2xl text-center mb-3"> ... </h2>
        @endforelse
        </div>
    </div>
    
</div>
