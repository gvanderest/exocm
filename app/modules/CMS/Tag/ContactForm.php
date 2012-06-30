<?php
/**
 * Contact Form Tag
 * @author Guillaume VanderEst <guillaume@vanderest.org>
 */
class CMS_Tag_ContactForm extends CMS_Tag
{
	public $library;

	public function init($args)
	{
		$this->library = new CMS_Library();
		$contact_form = $this->library->get_contact_form($args['id']);
		if (!$contact_form)
		{
			return NULL;
		}

		$fields = $this->library->get_contact_form_fields($contact_form->id);

		$form = new ExoUI_Form($args['id']);

		// cycle through fields to display appropriate object
		foreach ($fields as $field)
		{
			switch ($field->type)
			{
			case 'textarea':
				$obj = new ExoUI_Textarea($field->name, array(
					'label' => $field->name
				));
				break;
			case 'textbox':
				$obj = new ExoUI_Textbox($field->name, array(
					'label' => $field->name
				));
				break;
			}

			if ($field->required)
			{
				$obj->add_validation('required');
			}

			$form->add($obj);
		}

		// submit button
		$submit = new ExoUI_Submit('submit');
		$form->add($submit);

		if ($form->is_submitted())
		{
			if ($form->is_valid())
			{
				$subject = 'Form: ' . $contact_form->name;
				
				// get output of all fields and make email
				$message = $form->display_plaintext();

				// send email
				$to = $contact_form->emails;

				$result = mail($to, $subject, $message);

				// display success mesage
				if ($result)
				{
					return $contact_form->success_message;
				}
			}
		}

		return $form->display();
	}
}
