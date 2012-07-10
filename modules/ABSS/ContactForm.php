<?php
/**
 * ABSS Contact Form
 * @header
 */
class ABSS_ContactForm
{
	public function __construct()
	{
	}

	public function init()
	{
		$output = '<h2>Contact Form</h2>';

		if (isset($_GET['success']))
		{
			$output .= '<p>Your message has been successfully submitted.</p>';
			return $output;
		}

		$form = new ExoUI_Form('contact');

		$form->name = new ExoUI_Textbox('name', array(
			'label' => 'Your Name',
			'validations' => array('required')
		));

		$form->email = new ExoUI_Textbox('email', array(
			'validations' => array('email', 'required')
		));

		$form->message = new ExoUI_Textarea('message', array(
			'validations' => array('required')
		));

		$form->submit = new ExoUI_Submit();

		$form->add(array(
			$form->name,
			$form->email,
			$form->message,
			$form->submit
		));

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$data = $form->get_data();

				$to = 'support@abssnetworks.com';
				$from = $this->scrub($data->email);
				$subject = 'Contact Form: ' . $this->scrub($data->name);
				$message = $data->message;

				$result = mail($to, $subject, $message, 'From: ' . $from . "\n");

				if ($result)
				{
					redirect("?success=1");
				}
			}
		}
		$output .= $form->display();
		return $output;
	}
	
	public function scrub($string)
	{
		return str_replace(array("\r", "\n"), '', $string);
	}
}
