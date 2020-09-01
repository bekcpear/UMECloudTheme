<?php

namespace OCA\UMETheme;

use OC\Mail\EMailTemplate;

class UMEEMailTemplate extends EMailTemplate
{
	protected $header = <<<EOF
<table align="center" class="wrapper header float-center" style="Margin:0 auto;background:#fff;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%%">
	<tr style="padding:0;text-align:left;vertical-align:top">
		<td class="wrapper-inner" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:20px;text-align:left;vertical-align:top;word-wrap:break-word">
			<table align="center" class="container" style="Margin:0 auto;background:0 0;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:150px">
				<tbody>
				<tr style="padding:0;text-align:left;vertical-align:top">
					<td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
						<table class="row collapse" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%%">
							<tbody>
							<tr style="padding:0;text-align:left;vertical-align:top">
								<center data-parsed="" style="background-color:%s;min-width:150px;padding:50px;border-radius:50%">
									<img class="logo float-center" src="%s" alt="%s" align="center" style="-ms-interpolation-mode:bicubic;Margin:0 auto;clear:both;display:block;float:none;margin:0 auto;outline:0;text-align:center;text-decoration:none" height="50">
								</center>
							</tr>
							</tbody>
						</table>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
</table>
<table class="spacer float-center" style="Margin:0 auto;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%%">
	<tbody>
	<tr style="padding:0;text-align:left;vertical-align:top">
		<td height="40px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-size:80px;font-weight:400;hyphens:auto;line-height:80px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&#xA0;</td>
	</tr>
	</tbody>
</table>
EOF;
}
