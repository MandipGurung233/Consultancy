<tr>
    <td class="size">{{$contact->id}}</td>
    <td class="size">{{$contact->name}}</td>
    <td class="size">{{$contact->number}}</td>
    <td class="size">{{$contact->email}}</td>
    <td class="size">{{$contact->textarea}}</td>
    <td class="size">
        <a href="{{url('reply/'.$contact->id)}}" class="btn btn-primary">Reply</a>
    </td>
</tr>