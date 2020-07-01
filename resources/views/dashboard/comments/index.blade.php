
<div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                            @foreach($comments as $comment)

                          <tr>
                            <td>
                                @if($comment->user->id == $comment->user_id)
                                    <buttons class='btn btn-danger'>
                                        {{ucfirst('Instructor')}}
                                    </buttons>
                                @else
                                <buttons class='btn btn-primary'>
                                  {{ucfirst($comment->user->name)}}
                                </buttons>
                                @endif
                            </td>
                            <td>
                              <p>{{$comment->comment}}</p>
                              <p>{{$comment->created_at}}</p>
                             </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                              </button>
                              <a href="{{route('dashboard.comment.delete',['id'=>$comment->id])}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                <i class="material-icons">close</i>
                              </a>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    {{$comments->links()}}
                  </div>
