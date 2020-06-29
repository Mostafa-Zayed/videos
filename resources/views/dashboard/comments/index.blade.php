
<div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                            @foreach($comments as $comment)

                          <tr>
                            <td>
                              @if(isset($comment->user->instructor->user_id))
                                  
                                  @if($comment->user->instructor->user_id === auth()->user()->id)
                                    <buttons class='btn btn-warning'>Instructor</buttons>
                                  @endif
                              @else
                                <buttons class='btn btn-primary'>
                                  {{ucfirst($comment->user->full_name)}}
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
                              {{--@include('dashboard.shared.buttons.edit',['model'=>'Comment','models'=>'comments','id'=>$row->id])--}}
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
