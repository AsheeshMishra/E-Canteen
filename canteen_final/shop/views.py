from django.shortcuts import render, get_object_or_404,redirect
from .models import Category, Item
from cart.forms import CartAddProductForm
from cart.cart import Cart
from django.contrib.auth.decorators import login_required
# Create your views here.
from django.contrib.auth import logout
from .forms import UserRegisterForm

def logout_view(request):
    logout(request)
    return redirect('main_home')

def register_student(request):
    if request.method=='POST':
        form = UserRegisterForm(request.POST)
        if form.is_valid():
            x=form.save()
            x.save()
            return redirect('shop:student_login')
    else:
        form = UserRegisterForm()
    return render(request,'shop/student_signup.html',{'form':form})



@login_required(login_url='main_home')
def item_list(request, category_slug=None):
    category = None
    categories = Category.objects.all()
    items = Item.objects.filter(available=True)
    if category_slug:
        category = get_object_or_404(Category, slug=category_slug)
        items = Item.objects.filter(category=category)

    context = {
        'category': category,
        'categories': categories,
        'items': items
    }
    return render(request, 'shop/products/list.html', context)

@login_required(login_url='main_home')
def item_detail(request, id, slug):
    q=0
    item = get_object_or_404(Item, id=id, slug=slug, available=True)
    cart = Cart(request)
    for i in cart:
        if i['product']==item:
            q=i['quantity']
            break
    cart_product_form=CartAddProductForm(initial={'quantity':q})
    return render(request, 'shop/products/detail.html', {'item': item,'cart_product_form':cart_product_form})




