<div id="modal-auth" data-reactroot="" class="patched-styles-popup">
	<div class="popup-overlay-1CyxP" data-marker="auth-app/overlay">
		<div class="popup-container-1oHnH" data-marker="auth-app">
			<button data-marker="auth-app/close-button" type="button" class="popup-close-2W0cr">Закрыть</button>
			<div class="popup-content-2NIUn" data-marker="auth-app/content">
				<div class="app-root-1EXxJ">
					<div>
						<div class="auth-app-login-form-2_SQa">
							<form id="login-form" title="Вход" class="form-root-1ul41">
								{{ csrf_field() }}

								<div class="form-item--ppzC form-title-2g_6k form-title_center-bczaG text-root-v9A1j text-root_size-xl-2vJuQ">Вход
								</div>
								<div class="form-item--ppzC form-fieldset-35PgH">
									<div class="fieldset-root-KE8oj fieldset-root_layout_narrow-2jcgf">
										<div class="column-root-N_0Ue column-root_size_12-3Tazg">
											<div class="fieldset-field-25Lrl" data-marker="field">
												<div class="input-root-25XI- input-root_size-l-3b_08">
													<input id="email" type="email" value="{{ old('email') }}" name="email" placeholder="Электронная почта" class="input-input-25uCh input-part-1Wbyq">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-item--ppzC form-fieldset-35PgH">
									<div class="fieldset-root-KE8oj fieldset-root_layout_narrow-2jcgf">
										<div class="column-root-N_0Ue column-root_size_12-3Tazg">
											<div class="fieldset-field-25Lrl" data-marker="field">
												<div class="input-root-25XI- input-root_size-l-3b_08">
													<input id="password" type="password" placeholder="Пароль" name="password" class="input-input-25uCh input-part-1Wbyq">
													<div class="input-part-1Wbyq">
														<button data-marker="login-form/password/show-button" type="button" class="input-password-toggle-3XvdM">Показать/спрятать пароль</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-item--ppzC form-fieldset-35PgH">
									<div class="fieldset-root-KE8oj fieldset-root_layout_narrow-2jcgf">
										<div class="column-root-N_0Ue column-root_size_12-3Tazg"><div class="fieldset-field-25Lrl" data-marker="field">
											<div class="auth-form-row_space-between-2lZu7">
												<label class="checkbox-checkbox-7igZ6 checkbox-root-2fc3G checkbox-root_checked-3Ge9O checkbox-root_set-kXGxt" data-marker="login-form/remember">
													<input type="checkbox" name="remember" class="checkbox-input-3KD6i">
													<span class="checkbox-label-3AzRS" data-marker="login-form/remember/text">Запомнить пароль</span>
												</label>
												<a target="_self" class="link-root-2cO7y link-root_design-default-1jwcF link-root_novisited-29P8E" data-marker="login-form/restore">
													<span>Забыли пароль?</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-item--ppzC"></div>
							<div class="form-item--ppzC"></div>
							<div class="form-item--ppzC form-fieldset-35PgH">
								<div class="auth-form-row_submit-1jtMP action-root-2RsNF action-root_align-center-mUlAP fieldset-root-KE8oj fieldset-root_layout_narrow-2jcgf">
									<div class="column-root-N_0Ue column-root_size_12-3Tazg">
										<div class="fieldset-field-25Lrl" data-marker="field">
											<div id="button-login" class="auth-form-auth-form__submit-rSWaC">
												<button type="submit" disabled="" class="button-root-1ipaF button-root_size-l-wZZut button-root_design-primary-1huDW button-root_disabled-3tqD2 button-root_fullwidth-Npg7W" data-marker="login-form/submit">Войти</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</form>
							<span class="auth-app-social-auth-text-15zXw">или продолжить через</span>
							<div class="social-auth-root-PV78b" data-marker="social-auth">
							<span class="social-network-item-icon-1tXjO" data-marker="social-network-item(vk)">
								<img src="/s/build/resources/3cdd200f5194.svg">
							</span>
							<span class="social-network-item-icon-1tXjO" data-marker="social-network-item(ok)">
							<img src="/s/build/resources/a9e0ee8525ab.svg">
							</span>
								<span class="social-network-item-icon-1tXjO" data-marker="social-network-item(fb)">
									<img src="/s/build/resources/89c7d93b23ae.svg">
								</span>
								<span class="social-network-item-icon-1tXjO" data-marker="social-network-item(gp)">
									<img src="/s/build/resources/25791de0033d.svg">
								</span>
							</div>
						</div>
						<div class="auth-app-registration-block-1Di3U" data-marker="registration-block">
							<a href="{{ url('/register') }}" target="_self" class="auth-app-registration-link-2GM7E link-root-2cO7y link-root_design-default-1jwcF link-root_novisited-29P8E">Зарегистрироваться</a>
							<div class="auth-app-agreement-1JIbl"><!-- react-text: 56 -->При регистрации вы принимаете&nbsp;<!-- /react-text --><a href="https://support.avito.ru/articles/200026948" target="_self" class="auth-app-agreement__link-2aSFv link-root-2cO7y link-root_design-default-1jwcF link-root_novisited-29P8E">пользовательское соглашение</a><!-- react-text: 58 -->&nbsp;и&nbsp;<!-- /react-text --><a href="/safety/personal/company" target="_self" class="auth-app-agreement__link-2aSFv link-root-2cO7y link-root_design-default-1jwcF link-root_novisited-29P8E">политику о данных пользователей.</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>