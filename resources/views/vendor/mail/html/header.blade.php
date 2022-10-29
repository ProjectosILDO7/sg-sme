<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'SG-SME')
<img src="{{ asset('img/sme.png') }}" class="logo" alt="SME" width="30" height="20">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
