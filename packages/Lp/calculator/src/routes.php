<?php

Route::get('calculator', function () {
    dd('I am from the service');
});
// Route::controller(CronAppointmentController::class)->group(function () {
//     Route::get('order/appointments/cron', 'notifyEmployeeCron');
// });

Route::get('add/{a}/{b}', [Lp\Calculator\CalculatorController::class, 'add']);
