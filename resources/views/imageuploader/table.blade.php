<table id="datatable" class="table dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @php
            $i = 1
        @endphp
        @foreach ($images as $image)
            <tr>
                <td>{{$i++}}</td>
                <td><img src="/storage/{{ $image->image }}" class="rounded avatar-lg"></td>
                <td>{{Str::limit($image->description, 75)}}</td>
                <td>          
                    <a href="{{ route('imageupload.show', $image->id) }}" class="btn btn-info sm" title="View"> <i class="fas fa-eye" ></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
