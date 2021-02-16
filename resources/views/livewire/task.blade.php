<div class="mt-4 sm:px-10 bg-white">

    <div class="text-3xl font-bold mb-3">
        To Do List
    </div>
    <div class="row pb-4">
        <div class="flex mx-3">
            <a href="{{ route('newtodos') }}" class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"> </span>
                Create a New Task
            </a>
        </div>
        <div class="flex">
            <a href="{{ route ('newtodos')}}" class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"> </span>
                Create a New Habit
            </a>
        </div>
    </div>
    <div class="wrap-container overflow: hidden; mb-4">
        <div class="container">
        @forelse($task as $row)
            <!-- CARD -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card ml-3 mt-2 mb-6" id="card-item" style="border-radius: 20px !important; box-shadow: 0px 5px 10px #6777EF; width: 800px;">
                        <div class="card-body d-flex">
                            <div class="col-lg-9">
                                <h3 class="title text-2xl font-bold mb-1" style="color:#6777EF;"> {{ $row->task }}</h3>
                                <table>
                                    <tr>
                                        <th style="font-size: 16px;">Reward </th>
                                        <td style="font-size: 16px; font-weight:bold">&nbsp;:&nbsp; {{ $row->reward }}</td>
                                    </tr>
                                    <tr>
                                        <th style="font-size: 16px;">Deadline </th>
                                        <td style="font-size: 16px; font-weight:bold;">&nbsp;:&nbsp; <span style="color: #FC544B;">{{ $row->datentime }}</span></td>
                                    </tr>
                                    <tr>
                                        <th style="font-size: 16px;">Next step </th>
                                        <td style="font-size: 16px; font-weight:bold;">&nbsp;:&nbsp; <span style="color: #FFBD55;">{{ $row->step }}</span></td>
                                    </tr>
                                </table>
                                <div class="progress mt-2" style="width: 100%;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #FFBD55;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> 
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button wire:click="delete()" type="button" style="position: absolute; bottom: 0;" 
                                        class="-ml- btn btn-primary shadow-none py-2 px-3">
                                    Selesai
                                </button>
                            </div>

                            <!-- trigger modal -->
                            <div class="col-lg-1">
                                <button wire:click="detail({{ $row->id }})" type="button" style="position: absolute; bottom: 0; right: 0;" 
                                        class="-ml- btn btn-primary shadow-none py-2 px-3">
                                    Detail
                                </button>
                            </div>
                            @if ($isModal)
                                @include('livewire.expand')
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
