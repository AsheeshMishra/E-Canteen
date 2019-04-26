from django.db import models
from django.urls import reverse
from django.contrib.auth.models import User
from django.template.defaultfilters import slugify
# Create your models here.

class Category(models.Model):
    name = models.CharField(max_length=200, db_index=True,unique=True)
    slug = models.SlugField(max_length=200, db_index=True,unique=True)
    # slug = models.AutoSlugField(populate_from='name')
    
    class Meta:
        ordering = ('name', )
        verbose_name = 'category'
        verbose_name_plural = 'categories'

    def __str__(self):
        return self.name

    def get_absolute_urls(self):
    	return reverse('shop:item_list_by_category',args=[self.slug] )
    def save(self,**kwargs):
        self.slug=slugify(self.name)
        super(Category,self).save(**kwargs)

class Item(models.Model):
    category = models.ForeignKey(Category, related_name='items', on_delete=True)
    name = models.CharField(max_length=100, db_index=True,unique=True)
    slug = models.SlugField(max_length=100, db_index=True,unique=True)
    #  slug = models.AutoSlugField(populate_from='name')
    description = models.TextField(blank=True)
    price = models.DecimalField(max_digits=10, decimal_places=2)
    available = models.BooleanField(default=True)
    image = models.ImageField(upload_to='products/%Y/%m/%d', blank=True)
    shop_keeper = models.ForeignKey(User,null=True, blank=True, on_delete=models.CASCADE)

    class Meta:
        ordering = ('name', )
        index_together = (('id', 'slug'),)

    def __str__(self):
        return self.name

    def get_absolute_urls(self):
    	return reverse('shop:views.item_detail',args=[self.id,self.slug] )


    def save(self,**kwargs):
        self.slug=slugify(self.name)
        super(Item,self).save(**kwargs)