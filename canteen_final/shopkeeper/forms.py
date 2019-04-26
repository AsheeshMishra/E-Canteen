from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from shop.models import Item
class ShopkeeperCreationForm(UserCreationForm):
	IdentityNumber = forms.CharField(max_length=10)
	class Meta:
		model = User
		fields = ['username','IdentityNumber','password1','password2']

class AddFoodForm(forms.ModelForm):
	class Meta:
		model = Item
		fields = ['category','name','description','price','image']