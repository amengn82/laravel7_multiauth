@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('สวัสดีครับ!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{-- {{ $line }} --}}
เนื่องจากอีเมล์ของคุณมีการร้องขอเปลี่ยนแปลงรหหัสผ่าน กรุณากดปุ่มขอเปลี่ยนรหัสผ่าน
@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{-- {{ $actionText }} --}}
ขอเปลี่ยนรหัสผ่าน
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{-- {{ $line }} --}}
คำขอจะหมดอายุภายใน 60 นาที กรุณาทำรายการก่อนเวลาดังกล่าว
@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{-- {{ $salutation }} --}}
กรณีที่คำขอเปลี่ยนรรหัสผ่านไม่ได้เกิดจากคุณ กรุณาไม่ต้องทำรายการใดๆ
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent