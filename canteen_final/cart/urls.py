from django.contrib import admin
from django.urls import path,include

from django.conf import settings
from django.conf.urls.static import static
from . import views

app_name='cart'

urlpatterns=[

	path('',views.cart_detail,name='cart_detail'),
	path('add/<int:product_id>',views.cart_add,name="cart_add"),
	path('remove/<int:product_id>',views.cart_remove,name="cart_remove"),
	path('checkout/',views.checkout,name="checkout"),
	path('order_complete/',views.order_complete,name='order_complete'),
	path('clearcart/',views.clearcart,name="clearcart"),
	]

if settings.DEBUG:
	urlpatterns+=static(settings.MEDIA_URL,document_root=settings.MEDIA_ROOT)