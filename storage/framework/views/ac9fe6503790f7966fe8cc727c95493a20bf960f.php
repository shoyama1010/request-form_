<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/register.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="register__content">
	<div class="register-form__heading">
		<h2>register</h2>
	</div>
	<form class="form" action="/register" method="post">

		<div class="form__group">
			<div class="form__group-title">
				<span class="form__label--item">お名前</span>
			</div>
			<div class="form__group-content">
				<div class="form__input--text">
					<input type="text" name="name" value="<?php echo e(old('name')); ?>" />
				</div>
				<div class="form__error">
					<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="form__group-title">
				<span class="form__label--item">メールアドレス</span>
			</div>
			<div class="form__group-content">
				<div class="form__input--text">
					<input type="email" name="email" value="<?php echo e(old('email')); ?>" />
				</div>
				<div class="form__error">
					<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="form__group-title">
				<span class="form__label--item">パスワード</span>
			</div>
			<div class="form__group-content">
				<div class="form__input--text">
					<input type="password" name="password" />
				</div>
				<div class="form__error">
					<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
		</div>
		<!-- <div class="form__group">
			<div class="form__group-title">
				<span class="form__label--item">確認用パスワード</span>
			</div>
			<div class="form__group-content">
				<div class="form__input--text">
					<input type="password" name="password_confirmation" />
				</div>
			</div>
		</div> -->
		<div class="form__button">
			<button class="form__button-submit" type="submit">登録</button>
		</div>
	</form>
	<div class="login__link">
		<a class="login__button-submit" href="/login">login</a>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/register.blade.php ENDPATH**/ ?>