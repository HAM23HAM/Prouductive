<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:none sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h3 class="modal-title text-3xl" id="exampleModalCenterTitle"> {{ $taskname }} </h3>
                        <button wire:click="closeModal()" class="btn btn-danger"> X </button>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <P> {{ $description }} </P>
                        <table>
                            <tr>
                                <th style="font-size: 14px;">Deadline </th>
                                <td style="font-size: 14px; font-weight:bold;">&nbsp;:&nbsp; <span class="text-red-500">{{ $datentime }}</span></td>
                            </tr>
                            <tr>
                                <th style="font-size: 14px;">Reward </th>
                                <td style="font-size: 14px; font-weight:bold">&nbsp;:&nbsp; {{ $reward }}</td>
                            </tr>
                            <tr>
                                <th style="font-size: 14px;">Next step </th>
                                <td style="font-size: 14px; font-weight:bold;">&nbsp;:&nbsp; <span style="color: #FFBD55;">{{ $step }}</span></td>
                            </tr>
                        </table>
                        <div class="progress mt-2" style="width: 100%;">
                            <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #FFBD55;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a">
                            <button wire:click="edit({{ $row->id }})" type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <a>
                            <button wire:click="delete({{ $row->id }})" type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>