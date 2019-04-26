from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm

class UserRegisterForm(UserCreationForm):
	USN = forms.CharField(max_length=10)
	class Meta:
		model = User
		fields = ['username','USN','password1','password2']
		
