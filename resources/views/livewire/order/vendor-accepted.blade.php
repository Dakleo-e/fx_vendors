<div class="card-body pt-3">
    <div class="table-responsive">
        <!-- <div class="datatable-top">
            <button class="btn btn-light-primary mb-1 btn-sm csv">Export Excel</button>
            <div class="datatable-search">
                <input wire:model.live="search" class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="pc-dt-satetime-sorting">
            </div>
        </div> -->
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
                    <th scope="col">Date</th>
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
                    <td> {{ \Carbon\Carbon::parse($order->updated_at)->diffForHumans() }} </td>
                    <td>
                        <button wire:navigate wire:click="supplyOrder({{ $order->id }})" class="btn btn-shadow btn-success">Supply</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6"><h5 style="text-align: center;"><i class="fas fa-shopping-cart"></i> 0 Orders Accepted</h5></td>
                </tr>
                @endforelse 

             
                
            </tbody>
            
        </table>
        
    </div>
    
    
</div>
