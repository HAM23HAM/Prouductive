<!-- <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:none sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="">
                    <div class="modal-header">
                        <h3 class="modal-title text-3xl" id="exampleModalCenterTitle">
                            {{ $row->task }}
                        </h3>
                        <button wire:click="closeModal()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                            X
                        </button>
                    </div>
                    <div class="modal-body">
                        <P>
                            {{ $row->description }}
                        </P>
                        <h4 style="color:red;" class="text-2xl">
                            4 days left
                        </h4>
                        <div class="d-flex ">
                            <p class="next mb-1" style="font-size: 16px;"><b>Next task : </b> </p>
                            <p class="task mb-1" style="font-size: 16px;"><b>Mencuci</b></p>
                        </div>
                        <div class="d-flex">
                            <p class="reward" style="font-size: 16px;"><b>Reward : </b></p>
                            <p class="the-reward" style="font-size: 16px;"><b>{{ $row->reward }}</b></p>
                        </div>
                        <div class="progress" style="width: 100%;">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#">
                            <button type="button" class="btn btn-update" style="border-radius: 10px; background-color: #314ECE; color: white; font-weight: bold; padding: 5px 10px; margin-right: 10px;">Update</button>
                        </a>
                        <a href="#">
                            <button type="button" class="btn btn-delete" style="border-radius: 10px; background-color: red; color: white; font-weight: bold; padding: 5px 10px;">Delete</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->