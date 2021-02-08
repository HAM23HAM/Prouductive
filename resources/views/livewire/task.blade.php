<div class="mt-4 sm:px-10 bg-white">

    <div class="text-3xl font-bold mb-3">
        Tugas saya
    </div>
    <div class="row pb-4">
        <div class="flex mx-3">
            <a wire:click="create()"  class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"> </span>
                Buat Tugas Baru
            </a>
        </div>

        @if ($isModal)
            @include('livewire.create')
        @endif

        <div class="flex">
            <a href="{{ route ('todo.create')}}" class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"> </span>
                Buat Kebiasaan Baru
            </a>
        </div>
    </div>
    <div class="wrap-container overflow: hidden;">
        <div class="container">
            <!-- CARD -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card ml-3 mt-2 mb-6" id="card-item" style="border-radius: 20px !important; box-shadow: 0px 5px 10px #6777EF; width: 800px;">
                        <div class="card-body d-flex">
                            <div class="col-lg-10">
                                <h3 class="title text-2xl font-bold mb-1" style="color:#6777EF;">Belajar HTML</h3>
                                <div class="d-flex ">
                                    <p class="next mb-1" style="font-size: 16px;"><b>Next task : </b> </p>
                                    <p class="task mb-1" style="font-size: 16px;"><b>Mencuci</b></p>
                                </div>
                                <div class="d-flex">
                                    <p class="reward" style="font-size: 16px;"><b>Reward : </b></p>
                                    <p class="the-reward" style="font-size: 16px;"><b>Bakso dua mangkok</b></p>
                                </div>
                                <div class="progress" style="width: 100%;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #FFBD55;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> 
                                </div>
                            </div>

                            <!-- trigger modal -->
                            <div class="col-lg-2">
                                <button wire:click="detail()" type="button" style="position: absolute; bottom: 0; right: 0;" 
                                        class="-ml- btn btn-primary shadow-none py-2 px-3" data-toggle="modal" data-target="#exampleModalCenter">
                                    Detail
                                </button>
                            </div>
                            @if ($isModal)
                                @include('livewire.detail')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3 pb-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    @if (session()->has('message'))
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                            <div class="flex">
                                <div>
                                    <p class="text-sm">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-100 text-center">
                                <th class="border px-4 py-2" width="20%">Task</th>
                                <th class="border px-4 py-2" width="30%">Description</th>
                                <th class="border px-4 py-2" width="15%">Reward</th>
                                <th class="border px-4 py-2" width="25%">Step</th>
                                <th class="border px-4 py-2" width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($task as $row)
                                <tr>
                                    <td class="border px-4 py-2">{{ $row->task }}</td>
                                    <td class="border px-4 py-2">{{ $row->description }}</td>
                                    <td class="border px-4 py-2">{{ $row->reward }}</td>
                                    <td class="border px-4 py-2">{{ $row->step }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</button>
                                        <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>

    new WOW().init();

    $(document).ready(function() {

        $('.nav-item .nav-link').click(function(event){
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });

    });

    const filterTitle= document.querySelector("#filter-search");
    filterTitle.addEventListener("keyup", filterTour);

    function filterTour(e){
        const inputTour = e.target.value.toLowerCase();
        const card = document.querySelectorAll("#card-item");


        console.log(card.length)
        card.forEach((item) => {
            const itemText = item.textContent.toLowerCase();

            if(itemText.indexOf(inputTour) != -1){
                item.setAttribute("style", "display: block;");
                
            }
            else{
                item.setAttribute("style", "display: none !important; ");
                
            }

        })

    }

</script>
