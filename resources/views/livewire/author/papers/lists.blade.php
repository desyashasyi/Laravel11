<div>
    @if($papers->isNotEmpty())
        <div class="table-responsive users-table">
            <table class="table table-sm data-table">
                <thead class="thead">
                    <tr>
                        <th width="5%">No</th>
                        <th width="40%">Title</th>
                        <th width="10%">Status</th>
                        <th width="25%">Authors</th>
                        <th width="5%">Review Doc</th>
                        <th width="5%">Final Doc</th>
                        <th class="text-right" width="10%">Action</th>
                        <th width="1%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($papers as $index => $paper)
                        <tr>
                            <td>
                                {{$index+1}}
                            </td>
                            <td>
                                {{$paper->title}}
                            </td>
                            <td>
                                {{$paper->status->name}}
                            </td>
                            <td>
                                @foreach($paper->authors as $author)
                                    {{$author->profile->first_name}} {{$author->profile->last_name}}
                                @endforeach
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td class="text-right">
                                <span wire:click="$dispatch('editPaper_Author',{paperId: {{$paper->id}}})" style="color: green; cursor: pointer;">
                                    <i class="fa f-xs fa-edit"></i> Edit
                                </span>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <livewire:author.papers.edit>
</div>
