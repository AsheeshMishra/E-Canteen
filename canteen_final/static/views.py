from django.shortcuts import render, get_object_or_404,redirect
from .models import Category, Item
from cart.forms import CartAddProductForm
# Create your views here.

from .forms import UserRegisterForm

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

def item_detail(request, id, slug):
    item = get_object_or_404(Item, id=id, slug=slug, available=True)
    cart_product_form=CartAddProductForm()
    return render(request, 'shop/products/detail.html', {'item': item,'cart_product_form':cart_product_form})




