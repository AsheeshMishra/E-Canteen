from django.shortcuts import render,redirect
from .forms import ShopkeeperCreationForm,AddFoodForm
from shop.models import Item
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth import logout
from django.utils.decorators import method_decorator
from django.contrib.auth.decorators import login_required
from django.views.generic import(
	ListView,
	DetailView,
	CreateView,
	UpdateView,
	DeleteView
)
# Create your views here.
def logout_view(request):
	logout(request)
	return redirect('main_home')


def home(request):
	context={'items':Item.objects.all()}
	return render(request,'item_list.html',context)

class ItemListView(LoginRequiredMixin,ListView):
	model=Item
	login_url='main_home'
	template_name='item_list.html'
	context_object_name='items'

class ItemDetailView(LoginRequiredMixin,DetailView):
	model=Item
	template_name='item_detail.html'

class ItemCreateView(LoginRequiredMixin,CreateView):
	model=Item
	login_url='main_home'
	template_name='item_form.html'
	fields=['category','name','description','price','image']
	success_url="/shopkeeper/"

	def form_valid(self,form):
		form.instance.shop_keeper=self.request.user
		return super().form_valid(form)


class ItemUpdateView(LoginRequiredMixin,UpdateView):
	model=Item
	login_url='main_home'
	template_name='item_form.html'
	fields=['name','description','price','image']
	success_url="/shopkeeper/"


	def form_valid(self,form):
		form.instance.shop_keeper=self.request.user
		return super().form_valid(form)


class ItemDeleteView(LoginRequiredMixin,DeleteView):
	model=Item
	login_url='main_home'
	template_name='item_confirm_delete.html'
	success_url='/shopkeeper/'







def register_shopkeeper(request):
	if request.method=='POST':
		form = ShopkeeperCreationForm(request.POST)
		if form.is_valid():
			x = form.save()
			x.save()
			return redirect('shopkeeper:shopkeeper_login')
	else:
		form = ShopkeeperCreationForm()
	return render(request,'shopkeeper_signup.html',{'form':form})

@login_required(login_url='main_home')
def add_item(request):
	if request.method=='POST':
		form = AddFoodForm(request.POST,request.FILES)
		if form.is_valid():
			x = form.save()
			x.save()
	else:
		form = AddFoodForm()
	return render(request,'add_item.html',{'form':form})