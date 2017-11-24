<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BlogCategory;

/**
 * BlogCategorySearch represents the model behind the search form about `app\models\BlogCategory`.
 */
class BlogCategorySearch extends BlogCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category'], 'integer'],
            [['name_category', 'date_created', 'user_created'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BlogCategory::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_category' => $this->id_category,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'name_category', $this->name_category])
            ->andFilterWhere(['like', 'user_created', $this->user_created]);

        return $dataProvider;
    }
}
