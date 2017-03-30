<?php
namespace Blog\MainBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\Request;
class PostsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('postAutor')
            //->add('postDate')
            ->add('postContent', 'textarea', array('attr'=>array('cols'=>'100',
            'rows'=>'20')))
            ->add('postTitle', 'text', array('attr'=>array('size'=>'100')))
            //->add('postImage')
            //->add('postStatus')
            //->add('postModified')
            //->add('postUrl')
            //->add('postType')
            ->add('postCategory')
            ->add('imageFile', 'file', array('required' => false))
            ->add('public', 'submit')
        ;
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\MainBundle\Entity\Posts'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_mainbundle_posts';
    }
}
