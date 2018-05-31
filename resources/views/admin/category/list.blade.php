<h2>Category List</h2>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Parent_id</th>
    </tr>
    @foreach($list as  $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->parent_id}}</td>
        </tr>
    @endforeach
</table>
