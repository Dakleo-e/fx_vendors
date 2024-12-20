<div class="card-body pt-3">
    <div class="table-responsive">
        <div class="datatable-top">
            
                <button wire:click="exportExcel" class="btn btn-light-primary mb-1 btn-sm csv">
                    <span wire:loading.remove wire:target="exportExcel">Export Orders</span>
                    <span wire:loading wire:target="exportExcel">
                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                        Exporting...
                    </span>
                </button>

            <!-- <div class="datatable-search">
                <input wire:model.live="search" class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="pc-dt-satetime-sorting">
            </div> -->
        </div>
        <br>
        <br>
        <table class="table table-hover " id="pc-dt-simple">
            <thead>
                <tr>
                    <!-- <th scope="col">Image</th> -->
                    <th scope="col">Agent</th>
                    <th scope="col">Product</th>
                    <th scope="col">Farmer</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Agent Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Search section start -->
                @forelse($orders as $order)
                <tr wire:key="{{$order->id }} ">
                    <td>{{$order->agent->user->firstname }} {{ $order->agent->user->lastname }}</td>
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->farmer->fname }} {{ $order->farmer->lname }} </td>
                    <td>{{ $order->quantity }}</td>
                    <td>₦{{ number_format($order->product->agent_price, 2) }}</td>
                    <!-- <td>{{ $order->product->quantity }}</td> -->
                    <td>
                        <button wire:navigate wire:click="acceptOrder({{ $order->id }})" class="btn btn-shadow btn-success">Accept</button>
                        <button wire:navigate wire:click="declineOrder({{ $order->id }})" class="btn btn-shadow btn-danger">Decline</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6"><h5 style="text-align: center;"><i class="fas fa-shopping-cart"></i> 0 Pending Orders</h5 ></td>
                </tr>
                @endforelse 

             
                
            </tbody>
            
        </table>
        
    </div>
    
    
</div>

