 @extends('layout.main')

 @section('content')

	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title"> Generated Keys </h3>
                    </div>

					<table class="table rsa">
						<thead>
							<th>{{ __("Computer Identifier") }}</th>
							<th>{{ __("RSA Key") }}</th>
							<th>{{ __("IP") }}</th>
							<th>{{ __("State") }}</th>
							<th>{{ __("Country") }}</th>
							<th>{{ __("Generated At") }}</th>
						</thead>
						<tbody>
							@foreach($keys as $key)
								<tr>
									<td>{{ $key->computer_identifier }}</td>
									<td class="col-sm-6">{{ $key->rsa_identifier}}</td>
									<td>{{ $key->ip}}</td>
									<td>{{ $key->state}}</td>
									<td>{{ $key->country}}</td>
									<td>{{ $key->created_at}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>

	{{ $keys->links() }}
 @stop	

@push('style')
<style>
	.rsa {
    	table-layout: fixed;
    	word-wrap: break-word;
	}
</style>
@endpush