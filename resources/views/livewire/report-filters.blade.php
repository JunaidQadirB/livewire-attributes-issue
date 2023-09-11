<div>
    <labe>Report Type:</labe>
    <select wire:model="reportType" wire:change="reportTypeChange">
        <option value="">Select Type</option>
        @foreach($reportTypes as $type)
            <option wire:key="reportType_option_{{$type['value']}}"
                    value="{{$type['value']}}">{{$type['label']}}</option>
        @endforeach
    </select>

    <select wire:model="reportValue">
        <option value="">Select</option>
        @if ($reportType!=="")
            @foreach($reportTypes[$reportType]['data'] as $type)
                <option value="{{$type['value']}}"
                        wire:key="reportValue_option_{{$type['value']}}">{{$type['label']}}</option>
            @endforeach
        @endif
    </select>
</div>
