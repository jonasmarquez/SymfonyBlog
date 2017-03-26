<?php

namespace Blog\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('postAutor')
            ->add('postDate')
            ->add('postContent', array('required' => true ))
            ->add('postTitle', array('required' => true ))
            ->add('postImage')
            ->add('postStatus', array('required' => true ))
            ->add('postModified')
            ->add('postUrl')
            ->add('postType')
            ->add('postCategory')
            ->add('publicar', 'submit')
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
