<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

trait ToastTrait
{
    public function successToast($message)
    {
        LivewireAlert::title('')
            ->text($message)
            ->success()
            ->withOptions([
                'width' => 'auto',
                'background' => '#10b981',
                'color' => '#ffffff',
                'timer' => 3000,
                'padding' => '12px 16px',
                'position' => 'top-end',
                'showConfirmButton' => false,
                'showCancelButton' => false,
                'customClass' => [
                    'popup' => 'compact-toast success-toast',
                    'content' => 'toast-content',
                ],
                'showClass' => [
                    'popup' => 'animate__animated animate__slideInDown'
                ],
                'hideClass' => [
                    'popup' => 'animate__animated animate__slideOutUp'
                ],
                'allowOutsideClick' => true,
                'timerProgressBar' => false,
                'toast' => true,
                'iconHtml' => '<svg class="toast-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>',
            ])
            ->show();
    }

    public function errorToast($message = null)
    {
        LivewireAlert::title('')
            ->text($message ?? 'An error occurred. Please try again.')
            ->error()
            ->withOptions([
                'width' => 'auto',
                'background' => '#ef4444',
                'color' => '#ffffff',
                'timer' => 4000,
                'padding' => '12px 16px',
                'position' => 'top-end',
                'showConfirmButton' => false,
                'showCancelButton' => false,
                'customClass' => [
                    'popup' => 'compact-toast error-toast',
                    'content' => 'toast-content',
                ],
                'showClass' => [
                    'popup' => 'animate__animated animate__slideInDown'
                ],
                'hideClass' => [
                    'popup' => 'animate__animated animate__slideOutUp'
                ],
                'allowOutsideClick' => true,
                'timerProgressBar' => false,
                'toast' => true,
                'iconHtml' => '<svg class="toast-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>',
            ])
            ->show();
    }

    public function warningToast($message)
    {
        LivewireAlert::title('')
            ->text($message)
            ->warning()
            ->withOptions([
                'width' => 'auto',
                'background' => '#f59e0b',
                'color' => '#ffffff',
                'timer' => 3500,
                'padding' => '12px 16px',
                'position' => 'top-end',
                'showConfirmButton' => false,
                'showCancelButton' => false,
                'customClass' => [
                    'popup' => 'compact-toast warning-toast',
                    'content' => 'toast-content',
                ],
                'showClass' => [
                    'popup' => 'animate__animated animate__slideInDown'
                ],
                'hideClass' => [
                    'popup' => 'animate__animated animate__slideOutUp'
                ],
                'allowOutsideClick' => true,
                'timerProgressBar' => false,
                'toast' => true,
                'iconHtml' => '<svg class="toast-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>',
            ])
            ->show();
    }

    public function infoToast($message)
    {
        LivewireAlert::title('')
            ->text($message)
            ->info()
            ->withOptions([
                'width' => 'auto',
                'background' => '#3b82f6',
                'color' => '#ffffff',
                'timer' => 3000,
                'padding' => '12px 16px',
                'position' => 'top-end',
                'showConfirmButton' => false,
                'showCancelButton' => false,
                'customClass' => [
                    'popup' => 'compact-toast info-toast',
                    'content' => 'toast-content',
                ],
                'showClass' => [
                    'popup' => 'animate__animated animate__slideInDown'
                ],
                'hideClass' => [
                    'popup' => 'animate__animated animate__slideOutUp'
                ],
                'allowOutsideClick' => true,
                'timerProgressBar' => false,
                'toast' => true,
                'iconHtml' => '<svg class="toast-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>',
            ])
            ->show();
    }
}