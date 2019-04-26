from django.shortcuts import render,redirect

def login_redirect(request):
	curr_user_usern = request.user.username
	if 'shop' in curr_user_usern:
		return redirect('shopkeeper:item_list')
	else:
		return redirect('shop:item_list')