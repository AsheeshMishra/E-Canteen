
from django.contrib import admin
from . import views
from django.urls import path,include
from django.contrib.auth import views as auth_views
from django.views.generic.base import TemplateView

app_name='shop'


urlpatterns = [
	path('student_login/', auth_views.LoginView.as_view(template_name='shop/registration/login.html'), name='student_login'),
	path('student_signup/',views.register_student,name='student_signup'),
	path('item_list/',views.item_list,name='item_list'),
	path('<str:category_slug>/',views.item_list,name="items_list_by_category"),
 	path('<int:id>/<slug:slug>/',views.item_detail,name='item_detail'),
 	
]